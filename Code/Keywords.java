import java.util.*;
public class Keywords {
    public static String make(String find) {
        String options=new String();
        options="of, to, in, it, is, be, as, at, so, we, he, by, or, on, do, if, me, my, up, an, go, no, us, am,the, and, for, are, but, not, you, all, any, can, had, her, was, one, our, out, day, get, has, him, his, how, man, new, now, old, see, two, way, who, boy, did, its, let, put, say, she, too, use,that, with, have, this, will, your, from, they, know, want, been, good, much, some, time,a, I.";

        String array_find[] = new String[100];
        String array[] = new String[100];
        int len_array = 0;
        int i, k, j;
        String new_final = new String();
        StringTokenizer strToken = new StringTokenizer(find, " ,.;'\"\n");
        while (strToken.hasMoreTokens()) {
            array_find[len_array] = strToken.nextToken();
            len_array++;
        }

        int len_new = 0;
        i = 0;
        StringTokenizer strToken1 = new StringTokenizer(options, " \n");
        while (strToken1.hasMoreTokens()) {
            array[len_new] = strToken1.nextToken();
            //System.out.println(array[len_new]);
            len_new++;

        }
        //System.out.println(len_new);
        for (k = 0; k < len_array; k++) {
            i = 0;
            for (j = 0; j < len_new; j++) {
                //System.out.println(k);
                if (array[j].equalsIgnoreCase(array_find[k])) {
                    //System.out.println(array[k]);
                    i = 1;
                }
            }
            if (i == 0) {
                new_final = new_final + array_find[k];
                new_final = new_final + " ";

            }


        }
      //  System.out.println("keywords : " + new_final);
        return (new_final);
    }
}
