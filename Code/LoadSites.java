import java.util.HashSet;
import java.util.LinkedList;
import java.util.List;
import java.util.Set;
import java.io.IOException;

import org.jsoup.Connection;
import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

public class LoadSites {

	public static final String GOOGLE_SEARCH_URL = "https://www.google.com/search";
	public static List<String> pageStart = new LinkedList<String>();

	
	public static void sites(String searchTerm) throws IOException {
		

	    try
		{
		int num = 20;
		
		String searchURL = GOOGLE_SEARCH_URL + "?q="+searchTerm+"&num="+num;

		Document doc = Jsoup.connect(searchURL).userAgent("Mozilla/5.0").get();
	
		Elements results = doc.select("h3.r > a");

		for (Element result : results) {
			
			String linkHref = result.attr("href");
			String linkText = result.text();
			//System.out.println("Text::" + linkText + ", URL::" + linkHref.substring(7, linkHref.indexOf("&")));
			
			//pageStart.add(linkHref.substring(7, linkHref.indexOf("&")));
			
			pageStart.add(result.absUrl("href"));
			
		}
		
		}
		catch(Exception e)
		{
			String err=e.toString();
			write_output wo=new write_output();
			wo.error("Sites : "+err);
		}
	}
	public List<String> getLinks()
    {
        return this.pageStart;
    }

}