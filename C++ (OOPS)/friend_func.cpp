#include <iostream>
using namespace std;
class complex{
    int a,b;
    public:
        void display(){
            cout<<a<<" + i"<<b<<endl;
        }
        friend void getdata(complex& x1);
};
void getdata(complex& x1){
    x1.a=3;
    x1.b=9;
}
int main(){
    complex s1;
    getdata(s1);
    s1.display();
    return 0;
}