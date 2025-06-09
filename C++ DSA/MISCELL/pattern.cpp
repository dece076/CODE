//{ Driver Code Starts
//#include <iostream>

using namespace std;

// } Driver Code Ends
class Solution {
  public:
    void printTriangle1(int n) {
        for(int i=0;i<n;i++){
            for(int j=0;j<=i;j++){
                cout<<"* ";
            }
            cout<<endl;
        }
    }
    void printTriangle2(int n) {
        for(int i=0;i<n;i++){
            int a=1;
            for(int j=0;j<=i;j++){
                cout<<a<<" ";
                a++;
            }
            cout<<endl;
        }
    }
    void printTriangle3(int n) {
        int a=1;
        for(int i=0;i<n;i++){
            for(int j=0;j<=i;j++){
                cout<<a<<" ";
            }
            cout<<endl;
            a++;
        }
    }
    void printTriangle4(int n) {
	    for(int i=0;i<n;i++){
	        for(int j=0;j<n-i;j++){
	            cout<<"* ";
	        }
	        cout<<endl;
	    }
	}
    void printTriangle5(int n) {
	    for (int i=0;i<n;i++){
	        int a=1;
	        for(int j=0;j<n-i;j++){
	            cout<<a<<" ";
	            a++;
	     xqq   }
	        cout<<endl;
	    }
	}
    void printTriangle6(int n) {
        int a=0;
        for (int i=0;i<n;i++){
            for (int j=0;j<n-1-i;j++){
                cout<<" ";
            }
            for(int j=0;j<(2*i+1);j++){
                cout<<"*";
            }
            cout<<endl;
        }
    }
    void printTriangle7(int n) {
	    int m=(n*2-1);
	    for(int i=0;i<n;i++){
	        for(int j=0;j<i;j++){
	            cout<<" ";
	        }
	        for(int j=0;j<m;j++){
	            cout<<"*";
	        }
	        m=m-2;
	        cout<<endl;
	    }
	}
    void pattern9(int n) {
    int a=1;
    for(int i=0;i<n;i++){
            for(int j=0;j<(n-a);j++){
            cout<<" ";
            }
            for(int j=0;j<(2*i+1);j++){
            cout<<"*";
            }
            a++;
            cout<<endl;
        }
    a=0;
    for(int i=0;i<n;i++){
        for(int j=0;j<i;j++){
            cout<<" ";
        }
        for(int j=0;j<(2*n-a-1);j++){
            cout<<"*";
        }
        a=a+2;
        cout<<endl;
    }
    }
    void nStarDiamond(int n) {
        int a=1;
        for(int i=0;i<n;i++){
            for(int j=0;j<(n-a);j++){
            cout<<" ";
            }
            for(int j=0;j<(2*i+1);j++){
            cout<<"*";
            }
            a++;
            cout<<endl;
        }
        a=0;
        for(int i=0;i<n;i++){
            for(int j=0;j<i;j++){
            cout<<" ";
        }
        for(int j=0;j<(2*n-a-1);j++){
            cout<<"*";
        }
        a=a+2;
        cout<<endl;
        }
    }
    void nBinaryTriangle(int n) {
    for(int i=0;i<n;i++){
        int a=0;
        if(i%2==0)
            a=1;
        else
            a=0;
        for(int j=0;j<=i;j++){
            cout<<a;
            a=1-a;
        }
        cout<<endl;
    }
}
void numberCrown(int n) {
    int a=2;
    for(int i=0;i<n;i++){
        for(int j=1;j<=i+1;j++){
            cout<<j;
        }
        for(int j=0;j<(2*n-a);j++){
            cout<<" ";
        }
        a=a+2;
        for (int j = i + 1; j > 0; j--) {
            cout << j;
        }
        cout << endl;
    }
}
void nNumberTriangle(int n) {
    int next=1;
    int inc=1;
    for(int i=0;i<n;i++){
        for(int j=next;j<next+inc;j++){
            cout<<j<<" ";
        }
        next=next+inc;
        inc++;
        cout<<endl;
        
    }
}
void nLetterTriangle(int n) {
    // Write your code here.
    for(int i=0;i<n;i++){
        for(char ch='A';ch<='A'+i;ch++){
            cout<<ch;
        }
        cout<<endl;
    }
}
void symmetry(int n) {
    // Write your code here.
    int a=1;
    for(int i=1;i<2*n;i++){
        if(i<=n){
            for(int j=0;j<a;j++){
                cout<<"* ";
            }
            for(int j=0;j<(2*n-2*a);j++){
                cout<<"  ";
            }
            for(int j=0;j<a;j++){
                cout<<"* ";
            }
            a++;
            cout<<endl;
        }
        
        else{
            a=2*n-i;
            for(int j=0;j<a;j++){
                cout<<"* ";
            }
            for(int j=0;j<(2*n-2*a);j++){
                cout<<"  ";
            }
            for(int j=0;j<a;j++){
                cout<<"* ";
            }
            
            cout<<endl;
        }

    }
}
void alphaRamp(int n) {
    // Write your code here.
    char ch='A';
    for(int i=0;i<n;i++){
        for(int j=0;j<=i;j++){
            cout<<ch<<" ";
        }
        ch++;
        cout<<endl;
    }
}
void alphaHill(int n) {
    // Write your code here.
    int a=n-1;
    char c='A';
    for(int i=0;i<n;i++){
        for(int j=0;j<a-i;j++){
            cout<<"  ";
        }

        for(char ch='A';ch<='A'+i;ch++){
            cout<<ch<<" ";
        }
        if(i>0){
            for(char x=c;x>='A';x--){
                cout<<x<<" ";
            }
            c++;
        }
        cout<<endl;
    }
}
void symmetry1(int n) {
    // Write your code here.
    for(int i=0;i<n;i++){
            for(int j=0;j<n-i;j++){
                cout<<"* ";
            }
            for(int j=0;j<2*i;j++){
                cout<<"  ";
            }
            for (int j = 0; j < n - i; j++) {
                cout << "* ";
            }
            cout<<endl;
    }
        for(int i=0;i<n;i++){    
            for(int j=0;j<=i;j++){
                cout<<"* "; 
            }
            for(int j=0;j<(2*n-2*i+1);j++){
                cout<<"  ";
            }
            for (int j = 0; j <= i; j++) {
                cout << "* ";
            }
            cout << endl;
        }
}
void symmetry2(int n) {
    // Write your code here.
    int a=1;
    for(int i=1;i<2*n;i++){
        if(i<=n){
            for(int j=0;j<a;j++){
                cout<<"* ";
            }
            for(int j=0;j<(2*n-2*a);j++){
                cout<<"  ";
            }
            for(int j=0;j<a;j++){
                cout<<"* ";
            }
            a++;
            cout<<endl;
        }
        
        else{
            a=2*n-i;
            for(int j=0;j<a;j++){
                cout<<"* ";
            }
            for(int j=0;j<(2*n-2*a);j++){
                cout<<"  ";
            }
            for(int j=0;j<a;j++){
                cout<<"* ";
            }
            cout<<endl;
        }

    }
}
void getStarPattern(int n) {
    // Write your code here.
    for(int i=0;i<n;i++){
        if(i==0||i==n-1){
          for (int j = 0; j < n; j++) {
            cout << "*";
          }
        }
        else {
          for (int j = 0; j < n; j++) {
            if (j == 0 || j == n - 1) {
              cout << "*";
            }
            else{
                cout<<" ";
            }
          }
        }
        cout<<endl;
    }
}

};

//{ Driver Code Starts.

int main() {
    int t;
    cin >> t;
    while (t--) {
        int n;
        cin >> n;

        Solution ob;
        ob.printTriangle1(n);
        ob.printTriangle2(n);
        ob.printTriangle3(n);
        ob.printTriangle4(n);
        ob.printTriangle5(n);
        ob.printTriangle6(n);
        ob.printTriangle7(n);
        ob.pattern9(n);
        ob.nStarDiamond(n);
        ob.nBinaryTriangle(n);
        ob.numberCrown(n);
        ob.nNumberTriangle(n);
        ob.nLetterTriangle(n);
        ob.symmetry(n);
        ob.alphaRamp(n);
        ob.alphaHill(n);
        ob.symmetry1(n);
        ob.symmetry2(n);
        ob.getStarPattern(n);
    
cout << "~" << "\n";
}
    return 0;
}
// } Driver Code Ends