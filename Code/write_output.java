import java.io.*;
public class write_output
{
	public static void write(String output)throws IOException
	{
		FileWriter fw=new FileWriter("D:\\xampp\\htdocs\\ABUOCR\\Files\\output.txt");
		BufferedWriter br=new BufferedWriter(fw);
		PrintWriter pr=new PrintWriter(br);
		
		pr.println(output+"\n");
		
		pr.close();
	}	
	
	public static void error(String err)throws IOException
	{
		FileWriter fw=new FileWriter("D:\\xampp\\htdocs\\ABUOCR\\Files\\error.txt",true);
		BufferedWriter br=new BufferedWriter(fw);
		PrintWriter pr=new PrintWriter(br);
		
		pr.println(err+"\n");
		
		pr.close();
	}	
}