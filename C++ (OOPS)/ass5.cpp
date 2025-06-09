/*Create a class named Item that represents a product in a store. 
Private Data Members: double price: Stores the original price of the item.
Public Member Functions: 
void setPrice(double p): Sets the original price of the item. 
double TotalPrice(double discount = 10.0): Calculates and returns the total price of the item after applying the discount

The discount percentage should default to 10% if no value is provided*/

#include <iostream>
using namespace std;
class item{
    double price;
    public:
        void setprice(double p){
            price=p;
        }
        double tp(double discount = 10.0){
            price = (price - (discount/100 *price));
            return price;
        }
};
int main(){
    int n;
    cout<<"enter the number of items"<<endl;
    return 0;
}