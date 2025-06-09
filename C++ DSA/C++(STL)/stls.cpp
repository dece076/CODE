#include<iostream>
#include <vector>
#include <list>
using namespace std;
class cpair{
    public:
    cpair(){
        pair<int,int> p={1,2};
        cout<<p.first<<endl;
        cout<<p.second<<endl;
        pair<int,pair<int,float>> q={3,{4,4.1}};
        cout<<q.first<<" "<<q.second.first<<" "<<q.second.second<<endl;
        pair<int,int> arr[]={{1,2},{2,3},{3,4}};
        cout<<arr[1].second<<endl;
    }
};
void explainvector(){
    //the size of a vector is dynamic and can be increased later unlike arrays, even if the vector is declared with a size
    //initalising a vector
    vector<int> v={1,2,3};
    vector<int> v5;//here the size is not declared
    //both the function below are used to add elements to a vector
    v5.push_back(1);
    v5.emplace_back(2);//this is faster than previous process(idk why, quora it!)
    //pair can also be implemented in a vector
    vector <pair<int,int>> v2={{1,2},{3,4},{5,6}};
    vector <pair<int,int>> v3;
    v3.push_back({6,7});
    v3.emplace_back(8,9);//emplace_back func doesn't require '{}' inside bracket
    //initialsing vector with size
    vector <int> vx(5,100);//a vector of size 5 is created with all elements as 100
    vector<int> v7(5);//a vector of size 5 is created with all elements as 0 or garbage, this size '5' can be increased later
    vector<int> vy(v);//copying vector v into v2
    v.emplace_back(87);
    v.emplace_back(23);
    v.emplace_back(31);
    v.emplace_back(98);

    //iterating a vector, it means the iterator is of the type vector<int>,so :: is used
    //a vector can also be accessed using indices
    vector<int>::iterator it = v.begin(); //points to address of first element of a vector
    it++;
    cout<<*(it)<<endl;//prints second element
    it=it+2;
    cout<<*(it)<<endl;//prints fourth element
    vector<int>::iterator it1 = v.end();//this will point to next to last element of vector which is null
    it1--;
    cout<<*(it1)<< " ";//the last element of the vector will be printed as it is decremented once already  
    cout<<endl;
    //method 1
    for(vector<int>::iterator itt=v.begin();itt!=v.end();itt++){
        cout<<*(itt)<<" ";
    }
    cout<<endl;

    //method 2
    for(auto it2=v.begin();it2!=v.end();it2++){
        cout<<*(it2)<<" ";
    }
    cout<<endl;

    //method 3
    for(auto it4:v){//semi colon is used here and it points to vlaue and not address
        cout<<(it4)<<" ";
    }
    cout<<endl;

    //removing an element
    //{1 2 3 87 23 31 98}
    v.erase(v.begin()+1);//{1 3 87 23 31 98}
    for(auto it4:v){
        cout<<(it4)<<" ";
    }
    cout<<endl;

    //removing group of elements
    //{1 3 87 23 31 98}
    v.erase(v.begin(),v.begin()+2);//{87 23 31 98}
    for(auto it4:v){
        cout<<(it4)<<" ";
    }
    cout<<endl;

    //insert function

    //{87 23 31 98}
    v.insert(v.begin(),100);//{100 87 23 31 98}
    for(auto it:v){
        cout<<it<< " ";
    }
    cout<<endl;

    //{100 87 23 31 98}
    v.insert(v.begin()+1,3,102);////{100 102 102 102 87 23 31 98}
    for(auto it:v){
        cout<<it<<" ";
    }
}

void explainlist(){
    //lists are same as vectors, the only additional fucntion in list is that we can add elements from front whereas in vector we had to use insert function
    list<int> ls={1,2};
    //{1,2}
    ls.push_front(5);//{5,1,2}
    ls.emplace_front(4);//{4,5,1,2}
}
void explaindeque(){
    deque<int> d={1};//{1}
    d.push_front(9);//{9,1}
    d.emplace_front(8);//{8,9,1}
    d.push_back(3);//{8,9,1,3}
    d.emplace_back(6);//{8,9,1,3,6}

    d.pop_back();//{8,9,1,3}
    d.pop_front();//{9,1,3}

    //accessing elements
    d.front();//points to first element
    d.back();//points to last element

    //all the remaining functions are same as vectors
}
void explainstack(){
    stack<int> st;
    st.push(1);
    st.push(2);
    st.push(3);
    st.push(4);//{1,2,3,4}
    st.pop();//{1,2,3};
    st.emplace(4);//{1,2,3,4}
    cout<<st.top()<<endl;//prints 4
    cout<<st.size()<<endl;//prints 4
    cout<<st.empty()<<endl;//prints "false"

}
void explainDeque(){
    
}
int main(){
    cpair ob;
    explainvector();
    return 0;
}


