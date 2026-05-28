//lower and upper case hashing
#include <iostream>
using namespace std;
int main(){
    int hash[256]={0};
    string s;
    cout<<"enter for s"<<endl;
    cin>>s;
    for (int i=0;i<s.length();i++){
        hash[s[i]]+=1;
    }
    cout<<"enter for q"<<endl;
    char q;
    cin>>q;
    cout<<hash[q]<<endl;
}