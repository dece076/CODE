
#include <iostream>
using namespace std;
class complex{
    int a,b;
    public:
        void getdata(int a,int b){
            this->a=a;
            this->b=b;
        }
        void display(){
            cout<<"the complex no. is : "<<a<<" + i"<<b<<endl;
        }
        complex add(complex x2){
            complex temp;
            temp.a = a+x2.b;
            temp.b = b+x2.b;
            return temp;
        }
};
int main(){
    complex c1,c2,c3;
    c1.getdata(3,4);
    c2.getdata(6,7);
    c1.display();
    c2.display();
    c3=c1.add(c2);
    return 0;
}