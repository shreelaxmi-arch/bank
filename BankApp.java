
package mybankapp;


public class BankApp {
    int accId=1;
    double bal;
    int openAccnt(){
        System.out.println("account created");
        bal=500;
        accId++;
        return accId;
    }
    
    void depAmt(double amt){
        bal+=amt;
    }
    
    void wDrawAmt(double amt){
      bal-=amt;  
    }
    
    void balInquiry(int acc){
        
    }
}
