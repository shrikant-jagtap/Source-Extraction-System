import org.apache.lucene.queryparser.classic.ParseException;

import java.io.IOException;
import java.util.*;

class PageSearch
{
  private static final int MAX_PAGES_TO_SEARCH = 10;
  private Set<String> pagesVisited = new HashSet<String>();
  private  List<String> pagesToVisit = new LinkedList<String>();

  HashMap<String,Double> hits =new HashMap<>();
    HashMap<String,Double> hits_key=new HashMap<>();
    HashMap<Integer,String> hits_ind=new HashMap<>();
     /*  editing
    HashMap<String,Double> hits_key=new HashMap<>();
     */
	

  public void search(String searchWord,String keywords)throws IOException, ParseException
  {

	  
      while(this.pagesVisited.size() < MAX_PAGES_TO_SEARCH)
      {
          String currentUrl="";
          Crawler cr = new Crawler();
		  LoadSites ls=new LoadSites();
		  
          if(this.pagesToVisit.isEmpty())
          {
              this.pagesToVisit.addAll(ls.getLinks());
			  currentUrl = this.pagesToVisit.remove(0);
			  this.pagesVisited.add(currentUrl);
          }
          else
          {
              currentUrl = this.nextUrl();

          }

          String uri = currentUrl;
          int index1=uri.lastIndexOf(".")+1;
          int index2=index1+3;
          String type=uri.substring(index1,index2);
          //System.out.println("Type :"+uri.substring(index1,index2));

          double score=0;
          double key_score=0;
          TextSearch ts = new TextSearch();

          if(type.equals("pdf")) {
              ReadpdfFile pd=new ReadpdfFile();



             // String output=pd.pdfconvert(currentUrl,searchWord);
                // editing begins
             Timeset tc=new Timeset();
                String output=tc.check(currentUrl,searchWord);

              // editing ends
              if(output!=null&&!output.equals("not found")) {

                  System.out.println("This is if");
                  if (output.equals("")) {
                      hits.put(currentUrl, 0.0d);
                  } else {
                      score = ts.find(output, searchWord);
                      hits.put(currentUrl, score);
                  }


                  key_score = ts.find(output, keywords);
                  hits_key.put(currentUrl, key_score);

              }
              else {
                  System.out.println("this is else");
              }

          }
          else {
              cr.crawl(currentUrl);

             // score = cr.searchForWord(searchWord);


             String output=cr.searchForWord(searchWord);

              if(output.equals(""))
              {
                  hits.put(currentUrl,0.0d);
              }
              else
              {

                  score = ts.find(output, searchWord);
                  hits.put(currentUrl,score);

              }

              key_score=ts.find(output,keywords);
              hits_key.put(currentUrl,key_score);



          }

      /*   if(score<0.0001)
         {
             this.pagesVisited.remove(currentUrl);
             System.out.println("Lenght "+this.pagesVisited.size());
         } */


		System.out.println(currentUrl);
		System.out.println("Score "+score);
        //  wo.write(currentUrl);
          System.out.println("Key Score "+key_score);
        //  wo.write(currentUrl);
        //  wo.write("Score : "+score);
         /* if(success)
          {
              System.out.println(String.format("**Success** Word %s found at %s", searchWord, currentUrl));
              String rec="Received Source \n";
              currentUrl=rec+currentUrl;
			  wo.write(currentUrl);
              break;
          } */
          this.pagesToVisit.addAll(cr.getLinks());
      }
     // System.out.println("\n**Done** Visited " + this.pagesVisited.size() + " web page(s)");

    /*  String output="";
      double max=Double.MIN_VALUE;

      for (String key : hits.keySet()) {
        double value=hits.get(key);
        if(max<value) {
            output=key;
            max=value;
        }
        }

        System.out.println("Source : "+output);
        */


        int length=hits_key.size();
        double arr[][]=new double[length][2];
        int i=0;

        for (String key : hits_key.keySet()) {
            double value1=hits.get(key);
            double value2=hits_key.get(key);

            hits_ind.put(i,key);
            String s = String.format("%.5f",value1);
            arr[i][0]=Double.parseDouble(s);

            s = String.format("%.5f",value2);
            arr[i][1]=Double.parseDouble(s);
            i++;
           }

      Correlation ts= new Correlation();
      ts.max(hits_ind,arr,hits);
        }




      // end




  private String nextUrl()
  {
      String nextUrl;
      do
      {
          nextUrl = this.pagesToVisit.remove(0);
      } while(this.pagesVisited.contains(nextUrl));
      this.pagesVisited.add(nextUrl);
      return nextUrl;
  }
  
}