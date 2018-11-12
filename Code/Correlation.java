import java.io.IOException;
import java.util.HashMap;

class Correlation
{
    public  void max(HashMap<Integer,String> hits_ind,double arr[][],HashMap<String,Double> hits)throws IOException
    {
        HashMap<String,Integer> index= new HashMap<>();
        double max=Double.MIN_VALUE;
        String output="";
        write_output wo=new write_output();
        int flag=0;

        double[][] final_score=new double[arr.length][arr.length];
        for(int url=0;url<arr.length;url++) {

            for (int j=url-1;j>=0;j--)
            {
                double[] x=new double[2];
                double[] y=new double[2];
                double r,nr=0,dr_1=0,dr_2=0,dr_3=0,dr=0;
                double xx[],xy[],yy[];
                xx =new double[2];
                xy =new double[2];
                yy =new double[2];

                for(int k=0;k<2;k++)
                {
                    x[k]=arr[url][k];
                    y[k]=arr[j][k];

                }

                double sum_y=0,sum_yy=0,sum_xy=0,sum_x=0,sum_xx=0;
                int n=2;
                for(int i=0;i<n;i++)
                {
                    xx[i]=x[i]*x[i];
                    yy[i]=y[i]*y[i];
                }
                for(int i=0;i<n;i++)
                {
                    sum_x+=x[i];
                    sum_y+=y[i];
                    sum_xx+= xx[i];
                    sum_yy+=yy[i];
                    sum_xy+= x[i]*y[i];
                }

                nr=(n*sum_xy)-(sum_x*sum_y);
                double sum_x2=sum_x*sum_x;
                double sum_y2=sum_y*sum_y;
                dr_1=((n*sum_xx)-sum_x2);
                dr_2=((n*sum_yy)-sum_y2);
                dr_3=dr_1*dr_2;

                dr=Math.sqrt(dr_3);
                r=(nr/dr);
                String s = String.format("%.2f",r);
                r = Double.parseDouble(s);
                final_score[url][j]=r;
                if(r>0)
                {
                    flag++;
                }
                if(r>=max)
                {
                    r=max;
                    String site1=hits_ind.get(url);
                    String site2=hits_ind.get(j);
                    if(!index.containsKey(site1))
                    {
                        index.put(site1,1);
                    }
                    if(!index.containsKey(site2))
                    {
                        index.put(site2,1);
                    }

                }

                max=Double.MIN_VALUE;

                for (String key : index.keySet()) {
                    double value=hits.get(key);
                    if(max<value) {
                        output=key;
                        max=value;
                    }
                }

            }
        }

        if(flag==0)
        {
            max=Double.MIN_VALUE;
            for (String key : hits.keySet()) {
                double value=hits.get(key);
                if(max<value) {
                    output=key;
                    max=value;
                }
            }
        }

        wo.write(output);
        System.out.println("Source : "+output);
    }
}