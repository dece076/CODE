/*
Question:

You are keeping score for a baseball game.

You are given a list of strings operations.

The operations are:

Integer x
    Record score x

"+"
    Record sum of previous two scores

"D"
    Record double the previous score

"C"
    Remove previous score

Return the sum of all scores.

Example 1:
Input:
operations = ["5","2","C","D","+"]

Output:
30

Explanation:

5 -> [5]

2 -> [5,2]

C -> [5]

D -> [5,10]

+ -> [5,10,15]

Total = 30

Example 2:
Input:
operations = ["1"]

Output:
1
*/

#include <iostream>
#include <vector>
#include <stack>
using namespace std;

int calPoints(vector<string>& operations){
    stack <int> st;
    for(string s : operations){
        if(s =="C"){
            st.pop();
        }
        else if(s=="D"){
                st.push(2*(st.top()));
            }
        else if(s=="+"){
                int x=st.top();
                st.pop();
                int y=st.top()+x;
                st.push(x);
                st.push(y);
            }
        else{
            st.push(stoi(s));
        }
    }
    int sum=0;
    while(!st.empty()){
        sum+=st.top();
        st.pop();
    }
    return sum;
}

int main(){

    vector<string> operations = {"5","2","C","D","+"};

    cout << calPoints(operations);

    return 0;
}