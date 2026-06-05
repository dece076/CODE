/*
Question:

Design a stack that supports:

push(x)
pop()
top()
getMin()

All operations must run in O(1) time.

Example:

MinStack minStack;

minStack.push(-2);
minStack.push(0);
minStack.push(-3);

minStack.getMin();

Output:
-3

minStack.pop();

minStack.top();

Output:
0

minStack.getMin();

Output:
-2
*/

#include <iostream>
#include <stack>
using namespace std;

class MinStack {

public:
    stack <int> st;
    stack <int> min;
    MinStack() {

    }

    void push(int val) {
        st.push(val);
        if (min.empty() || val<=min.top()){
            min.push(val);
        }
    }

    void pop() {
        if (st.top()==min.top()){
            min.pop();
        }
        st.pop();
    }

    int top() {
        return st.top();

    }

    int getMin() {
        return min.top();
    }
};

int main() {

    MinStack st;

    st.push(-2);
    st.push(0);
    st.push(-3);

    cout << st.getMin() << endl;

    st.pop();

    cout << st.top() << endl;
    cout << st.getMin();

    return 0;
}