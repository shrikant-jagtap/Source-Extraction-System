import org.apache.lucene.queryparser.classic.ParseException;
import org.jsoup.Connection;
import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import java.io.IOException;
import java.util.LinkedList;
import java.util.List;

public class Crawler
{
    private static final String USER_AGENT =
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/13.0.782.112 Safari/535.1";
    private List<String> links = new LinkedList<String>();
    private Document htmlDocument;
	


    public boolean crawl(String url) throws IOException
    {
        write_output wo=new write_output();
        try
        {


		
            Connection connection = Jsoup.connect(url).userAgent(USER_AGENT);
            Document htmlDocument = connection.get();
          //  System.out.println("URL 2 "+url);
            this.htmlDocument = htmlDocument;



            if(connection.response().statusCode() == 200) // 200 is the HTTP OK status code
                                                          // indicating that everything is great.
            {
           //     System.out.println("\n**Visiting** Received web page at " + url);
			//	wo.write(url);
            }

            if(!connection.response().contentType().contains("text/html"))
            {
                System.out.println("**Failure** Retrieved something other than HTML");
                return false;
            }
            Elements linksOnPage = htmlDocument.select("a[href]");
         //   System.out.println("Found (" + linksOnPage.size() + ") links");
			System.out.println();
            for(Element link : linksOnPage)
            {
                this.links.add(link.absUrl("href"));
            }
            return true;
        }
        catch(IOException ioe)
        {
            // We were not successful in our HTTP request
            wo.error("crawl : "+ioe.toString());
            return false;
        }
    }


    public String searchForWord(String searchWord)  throws IOException, ParseException
    {
       
        if(this.htmlDocument == null)
        {
          //  System.out.println("ERROR! Call crawl() before performing analysis on the document");
            return "";
        }
       // System.out.println("Searching for the word " + searchWord + "...");
        String bodyText = this.htmlDocument.body().text();
        return bodyText;

      /*  TextSearch ts=new TextSearch();
        double score= ts.find(bodyText,searchWord);

        */

       //  return bodyText.toLowerCase().contains(searchWord.toLowerCase());
    }


    public List<String> getLinks()
    {
        return this.links;
    }

}

