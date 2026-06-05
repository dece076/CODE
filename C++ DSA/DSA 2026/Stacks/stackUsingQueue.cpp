/*
Question:

Implement a stack using queues.

Implement:

push(x)
pop()
top()
empty()

A stack follows LIFO order.

Example:

push(1)
push(2)

top()

Output:
2

pop()

Output:
2

empty()

Output:
false
*/

#include <iostream>
#include <queue>
using namespace std;

class MyStack {

public:
    queue <int> q;
    MyStack() {

    }

    void push(int x) {
        q.push(x);
        int sz=q.size();
        while (sz>1){
            q.push(q.front());
            q.pop();
            sz--;
        }
    }

    int pop() {
        q.pop();
    }

    int top() {
        return q.front();
    }

    bool empty() {
        if (q.empty()){
            return true;
        }
        else
            return false;   
    }
};

int main() {

    MyStack st;

    st.push(1);
    st.push(2);

    cout << st.top() << endl;
    cout << st.pop() << endl;
    cout << st.empty();

    return 0;
}