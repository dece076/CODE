/*
Question:

Implement a queue using only stacks.

Implement:

push(x)
pop()
peek()
empty()

A queue follows FIFO order.

Example:

Input:

push(1)
push(2)

peek()

Output:
1

pop()

Output:
1

empty()

Output:
false
*/

#include <iostream>
#include <stack>
using namespace std;

class MyQueue {

public:
    stack <int> st1;
    stack <int> st2; 

    MyQueue() {

    }

    void push(int x) {
        st1.push(x);
        

    }

    int pop() {
        if (st2.empty()){
            while(!st1.empty()){
                st2.push(st1.top());
                st1.pop();
            }
        }
        int x =st2.top();
        st2.pop();
        return x;
    }


    int peek() {
        if (st2.empty()){
            while(!st1.empty()){
                st2.push(st1.top());
                st1.pop();
            }
        }
        return st2.top();
    }

    bool empty() {
        if(st1.empty()&&st2.empty())
            return true;
        else
            return false;
    }
};

int main() {

    MyQueue q;

    q.push(1);
    q.push(2);

    cout << q.peek() << endl;
    cout << q.pop() << endl;
    cout << q.empty();

    return 0;
}