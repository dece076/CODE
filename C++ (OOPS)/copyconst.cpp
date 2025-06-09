#include <iostream>
using namespace std;
class com{
    int a,b;
    public:
        com(){

        }
        com(int a,int b){
            this->a=a;
            this->b=b;
        }
        com(com& x1){
            cout<<"copy constructor invoked "<<endl;
            cout<<"a is: "<<x1.a<<endl;
            cout<<"b is: "<<x1.b<<endl;
        }
};
int main(){
    com c1;
    com c2(c1);
    return 0;
}