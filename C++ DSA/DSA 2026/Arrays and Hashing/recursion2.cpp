#include <iostream>
using namespace std;
void printName(int n, string name) {
    //if (n == 0) return 0;
    //return func(n - 1);
    //cout << n;
    if (n==0){
        return;
    }
    cout<<name<<endl;
    printName((n-1),name);
}

int main() {
    //func(3);
    int n;
    string name;
    cout<<"enter for n and name"<<endl;
    cin>>n;
    cin>>name;
    printName(n,name);
}