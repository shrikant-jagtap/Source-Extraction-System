import org.apache.lucene.queryparser.classic.ParseException;
import org.apache.pdfbox.io.RandomAccessBufferedFileInputStream;
import org.apache.pdfbox.io.RandomAccessRead;
import org.apache.pdfbox.pdfparser.PDFParser;
import org.apache.pdfbox.text.PDFTextStripper;

import java.io.IOException;
import java.io.InputStream;
import java.net.URL;

public class ReadpdfFile {

    public static String pdfconvert(String currentUrl, String searchWord) throws IOException, ParseException {

        write_output wo=new write_output();
        try {

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

            String output = new PDFTextStripper().getText(parser.getPDDocument());
            //    System.out.println(output);

         /*   TextSearch ts = new TextSearch();
            double score = ts.find(output, searchWord); */

            parser.getPDDocument().close();

            return output;
        } catch (Exception e) {

            wo.error("pdfconvert : "+e.toString());
            return "";
        }

    }
}
