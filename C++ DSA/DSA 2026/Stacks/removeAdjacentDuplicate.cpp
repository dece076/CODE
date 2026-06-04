/*
Question:

Given a string s.

Repeatedly remove adjacent duplicate characters.

Return the final string after all removals.

Example 1:
Input:
s = "abbaca"

Output:
"ca"

Explanation:

abbaca

aaca

ca

Example 2:
Input:
s = "azxxzy"

Output:
"ay"

Explanation:

azxxzy

azzy

ay
*/

#include <iostream>
#include <stack>
#include <algorithm>
using namespace std;

string removeDuplicates(string s){
    stack <char> st;
    for(char ch:s){
        if(!st.empty()&&ch==st.top()){
            st.pop();
        }
        else
            st.push(ch);
    }
    string sr="";
    while (!st.empty()){
        sr+=st.top();
        st.pop();
    }
    reverse(sr.begin(),sr.end());
    return sr;
}

int main(){

    string s = "abbaca";

    cout << removeDuplicates(s);

    return 0;
}