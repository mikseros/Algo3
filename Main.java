import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		System.out.println("Enter whole, positive number: ");
		long num = sc.nextLong();
		ArrayList<Long> dividers = new ArrayList<Long>();
		
		for(long i=1;i<=Math.sqrt(num);i++) {
			
			if(num % i == 0) {
				dividers.add(i);
				if(num / i != i) {
					dividers.add(num/i);
				}
			}
		}
		if(dividers.size() == 2) {
			System.out.println(num + " is prime number");
		}else if(dividers.size() == 0){
			System.out.println("0 is not prime number !");
		}else {
			Collections.sort(dividers);
			System.out.println(num + " is not prime");
			System.out.println("Dividers: " + dividers);
		}
		sc.close();		
	}


}