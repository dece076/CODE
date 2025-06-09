
//post increment, pre increment, unary minus

#include <iostream>
using namespace std;
class complex{
    int a,b;
    public:
        complex(){
            a=b=0;
        }
        complex(int x,int y){
            a=x;
            b=y;
        }
        void show(){
            cout<<a<<" + i"<<b<<endl;
        }
        void operator++(){
            a=a+1;
        }
        void operator++(int){
            b=b+1;
        }
        void operator-(){
            a=-a;
        }
};
int main(){
    complex c1(3,4);
    ++c1;
    c1++;
    -c1;
    c1.show();
    return 0;
    complex c2(6,7);
}