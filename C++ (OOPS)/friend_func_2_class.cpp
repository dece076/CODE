#include <iostream>
using namespace std;
class test2;
class test1{
    int a;
    public:
        void getdata(int a){
            this->a=a;
        }
        friend void big(test1& x1,test2& x2);
};
class test2{
    int b;
    public:
        void getdata(int b){
            this->b=b;
        }
        friend void big(test1& x1,test2& x2);

};
void big(test1& x1,test2& x2){
    if (x1.a > x2.b){
        cout<<"a is greater than b"<<endl;
    }
    else{
        cout<<"b is greater than a"<<endl;
    }
}
int main(){
    test1 ob1;
    test2 ob2;
    ob1.getdata(5);
    ob2.getdata(6);
    big(ob1,ob2);
}