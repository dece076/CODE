#include <iostream>
using namespace std;
class test2;
class test1{
    int a;
    public:
        void getdata(int a){
            this->a=a;
        }
        void display(){
            cout<<"a is: "<<a<<endl;
        }
        friend void big(test1& x1,test2& x2);
};
class test2{
    int b;
    public:
        void getdata(int b){
            this->b=b;
        }
        void display(){
            cout<<"b is: "<<b<<endl;
        }
        friend void big(test1& x1,test2& x2);

};
void big(test1& x1,test2& x2){
    int m;
    m=x1.a;
    x1.a=x2.b;
    x2.b=m;
}
int main(){
    test1 ob1;
    test2 ob2;
    ob1.getdata(5);
    ob2.getdata(6);
    ob1.display();
    ob2.display();
    big(ob1,ob2);
    ob1.display();
    ob2.display();
}