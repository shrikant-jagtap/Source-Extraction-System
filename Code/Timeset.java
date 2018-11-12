
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import java.util.concurrent.ExecutionException;
import java.util.concurrent.TimeUnit;
import java.util.concurrent.Future;
import org.apache.lucene.queryparser.classic.ParseException;
import org.apache.pdfbox.io.RandomAccessBufferedFileInputStream;
import org.apache.pdfbox.io.RandomAccessRead;
import org.apache.pdfbox.pdfparser.PDFParser;
import org.apache.pdfbox.text.PDFTextStripper;

import java.io.IOException;
import java.io.InputStream;
import java.net.URL;
public class Timeset{ 
public static String check(final String currentUrl,final String searchWord)throws IOException
{
   final ReadpdfFile pd=new ReadpdfFile();
    final String[] output = new String[1];
    ExecutorService executor = Executors.newFixedThreadPool(4);
    Future<?> future = executor.submit(new Runnable() {
        @Override
        public void run() {
           try{
			 //  System.out.println("F");
			   //Thread.sleep(119000);       //<-Your job
			// System.out.println("F2");
               String url_select = currentUrl;


               URL url = new URL(url_select);
               String temp = url.getFile();
               String temp1 = temp.substring(7, temp.lastIndexOf(".") + 4);
               System.out.println(" gasdvgj " + temp1);
               url = new URL(temp1);
               InputStream fileToParse = new RandomAccessBufferedFileInputStream(url.openStream());

               //parse()  --  This will parse the stream and populate the COSDocument object.
               //COSDocument object --  This is the in-memory representation of the PDF document

               PDFParser parser = new PDFParser((RandomAccessRead) fileToParse);
               parser.parse();

               //getPDDocument() -- This will get the PD document that was parsed. When you are done with this document you must call    close() on it to release resources
               //PDFTextStripper() -- This class will take a pdf document and strip out all of the text and ignore the formatting and           such.

               String result = new PDFTextStripper().getText(parser.getPDDocument());
               //    System.out.println(output);

         /*   TextSearch ts = new TextSearch();
            double score = ts.find(output, searchWord); */

               parser.getPDDocument().close();

             //  return output;

             //  String result=pd.pdfconvert(currentUrl,searchWord);
               System.out.println(1);
                output[0]=result;
		   }catch(Exception e){
			  // System.out.println("hello");
               System.out.println(2);
               output[0]="not found";
		   }		  
						}
    });

    executor.shutdown();           

    try {
        future.get(10, TimeUnit.SECONDS);
    }
	catch (Exception e) {
        future.cancel(true);                }

   
    try{
		if(!executor.awaitTermination(10, TimeUnit.SECONDS)){
             executor.shutdownNow();
			 }
}
	catch(Exception e){}
	
	//System.out.println("End task");
    return output[0];
}
}