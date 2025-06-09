#include <iostream>
using namespace std;
int max(int a,int b){
    if (a>b){
        return a;
    }
    else if(b>a){
        return b;
    }
    else{
        return 0;
    }
}
int main(){
    int a,b;
    cout<<"enter two numbers to compute :"<<endl;
    cin>>a>>b;
    cout<<max(a,b)<<endl;
    return 0;
}