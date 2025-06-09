#include <iostream>
using namespace std;
class x{
    int a,b;
    public:
        x(){
            a=1;
            b=1;
        }
        x(int a,int b=10){
            this->a=a;
            this->b=b
        }
        x(int a,float b){
            this->a=a;
            this->b=b;
        }
        int geta(){
            return a;
        }
        int getb(){
            return b;
        }
};
int main(){
    //default constructor
    x ob1;
    //parametrized constructot
    x ob2(3);
    x ob3(7,8.9f);
    cout<<"a is: "<<ob1.geta()<<endl;
    cout<<"b is: "<<ob1.getb()<<endl;
    cout<<"a is: "<<ob2.geta()<<endl;
    cout<<"b is: "<<ob2.getb()<<endl;
    cout<<"a is: "<<ob3.geta()<<endl;
    cout<<"b is: "<<ob3.getb()<<endl;
    return 0;
}