#include <iostream>
using namespace std;
int main(){
    int* p = new int(7);
    cout<<p<<endl;
    cout<<*p<<endl;
    delete p;
    cout<<"array ptrs"<<endl;
    int arr[4]={10,20,30,40};
    cout<<*(arr+1)<<endl;
    int* ptr=arr;
    cout<<*(ptr+1)<<endl;
    
}