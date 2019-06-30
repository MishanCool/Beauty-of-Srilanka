import java.util.Scanner;

class addition {
    public static void main(String arg[]) {
        float x=1 ;
       
        Scanner input = new Scanner(System.in);
        System.out.printf("what is the number do you want to know :");
        int n = input.nextInt();
        int i;

        for(i=0;i<n;i++)
        {
            x=3-(1/x);
        }

        System.out.printf("sum is : " + x);
    }
}