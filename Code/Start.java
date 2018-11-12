import java.io.IOException;
import java.util.LinkedList;
import java.util.List;
import java.io.*;

import org.apache.lucene.queryparser.classic.ParseException;
import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;


import java.io.IOException;
import java.util.Scanner;


public class Start
{
    
    public static void main(String[] args)throws IOException, ParseException
    {
		FileReader fr=new FileReader("D:\\xampp\\htdocs\\ABUOCR\\Files\\input.txt");
		BufferedReader br=new BufferedReader(fr);
		
		String line="";	 
		String searchTerm = "";

		while((line=br.readLine())!=null)
		{
			searchTerm=searchTerm+line;
			//searchTerm.trim();
		}


        searchTerm=searchTerm.trim();

		Keywords key=new Keywords();
		String keywords=key.make(searchTerm);

		//System.out.println(searchTerm);

		//String keywords="unifying calming effect  just";
        keywords=keywords.trim();
		LoadSites ls=new LoadSites();
		ls.sites(searchTerm);
		
		PageSearch pg = new PageSearch();
		//pg.search(searchTerm);
		pg.search(searchTerm,keywords);
        /*  editing
        pg.search(searchTerm,keywords);
         */
	
    }
}



