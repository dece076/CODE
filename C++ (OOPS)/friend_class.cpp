#include <iostream>
using namespace std;
class test2;
class test1{
    int a,b;
    public:
        void getdata(int a,int b){
            this->a=a;
            this->b=b;
        }
        friend class test2;
};
class test2{
    public:
    void display(test1& t1){
        cout<<"a is: "<<t1.a;
        cout<<"b is: "<<t1.b;
    }
};
int main(){
    test1 ob1;
    ob1.getdata(4,5);
    test2 ob2;
    ob2.display(ob1);
    return 0;
}