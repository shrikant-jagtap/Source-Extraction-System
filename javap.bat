set path="C:\Program Files\Java\jdk1.8.0_121\bin"
set classpath=jsoup-1.8.1.jar;.;%classpath% 
javac Crawler.java
javac LoadSites.java
javac PageSearch.java
javac Start.java
javac write_output.java
java Start
echo done