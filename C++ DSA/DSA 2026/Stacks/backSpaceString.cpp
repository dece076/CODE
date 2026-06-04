/*
Question:

Given two strings s and t.

'#' represents a backspace character.

Return true if both strings are equal after
processing all backspaces.

Example 1:
Input:
s = "ab#c"
t = "ad#c"

Output:
true

Explanation:

Both become:

"ac"

Example 2:
Input:
s = "ab##"
t = "c#d#"

Output:
true

Explanation:

Both become empty strings.

Example 3:
Input:
s = "a#c"
t = "b"

Output:
false
*/

#include <iostream>
#include <stack>
using namespace std;

bool backspaceCompare(string s, string t){
    stack <char> st;
    stack <char> st2;
    for(char ch:s){
        if(ch=='#'){
            st.pop();
        }
        st.push(ch);
    }
    for(char ch:t){
        if(ch=='#'){
            st2.pop();
        }
        st2.push(ch);
    }
    if(st==st2){
        return true;
    }
    else
        return false;
}

int main(){

    string s = "ab#c";
    string t = "ad#c";

    cout << backspaceCompare(s,t);

    return 0;
}