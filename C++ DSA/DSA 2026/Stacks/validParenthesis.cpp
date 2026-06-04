/*
Question:

Given a string s containing just the characters:

'(', ')', '{', '}', '[' and ']'

Determine if the input string is valid.

A string is valid if:

1. Open brackets are closed by the same type of brackets.
2. Open brackets are closed in the correct order.
3. Every closing bracket has a corresponding opening bracket.

Example 1:
Input:
s = "()"

Output:
true

Explanation:
'(' is matched by ')'.

Example 2:
Input:
s = "()[]{}"

Output:
true

Explanation:
All brackets are properly matched.

Example 3:
Input:
s = "(]"

Output:
false

Explanation:
'(' cannot be matched with ']'.
*/

#include <iostream>
#include <stack>
using namespace std;

bool isValid(string s){
    stack<char> st;
    for(char ch:s){
        if (ch=='('||ch=='['||ch=='{'){
            st.push(ch);
        }
        else if(ch==')' && st.top()=='('||ch=='}' && st.top()=='{'||ch==']' && st.top()=='['){
                st.pop();
            }
    }
    if (st.empty()){
            return true;
    }
    else 
        return false;
}

int main(){

    string s = "(){{}}[]{}";

    cout << isValid(s);

    return 0;
}