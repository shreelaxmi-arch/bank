
package mybankapp;


import static java.lang.System.exit;
import java.util.Scanner;

public class MyBankApp {


    public static void main(String[] args) {
        int accId=1,aId,choice;
        boolean flag = true;
        double amt;
        BankApp[] bnk = new BankApp[50];
        while(flag){
            System.out.println("Enter 1.Open 2.Dep 3.WDraw 4.BalInq 5.Exit");
            Scanner sc = new Scanner(System.in);
            choice = sc.nextInt();
            
            switch(choice){
                case 1:
                    bnk[accId] = new BankApp();
                    accId=bnk[accId].openAccnt();
                    break;
               case 2:
                    System.out.println("Enter the acc id:");
                    aId= sc.nextInt();
                    if(aId >= accId  || aId<=0){
                        System.out.println("Invalid id");
                    }else
                    {
                        System.out.println("Enter the dep amt:");
                        amt=sc.nextDouble();
                        bnk[aId].depAmt(amt);
                    } 
                    break;
                     case 3:
                    System.out.println("Enter the acc id:");
                    aId= sc.nextInt();
                    if(aId >= accId  || aId<=0){
                        System.out.println("Invalid id");
                    }else
                    {
                        System.out.println("Enter the amt to be withdraw:");
                        amt=sc.nextDouble();
                        bnk[aId].wDrawAmt(amt);
                    } 
                    break;
                     case 4:System.out.println("Enter the acc id:");
                    aId= sc.nextInt();
                    if(aId >= accId  || aId<=0){
                        System.out.println("Invalid id");
                    }else
                    {
                         System.out.println("amt is "+amt);
                    }
                    break;
                     case 5:exit(0);
                     break;
            }
        }
    }
}

