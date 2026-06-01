/*
Question:
Given a 1-indexed array of integers numbers
that is already sorted in non-decreasing order,
find two numbers such that they add up to a specific target.

Return the indices (1-indexed) of the two numbers.

You may assume that each input has exactly one solution,
and you may not use the same element twice.

Example 1:
Input:
numbers = [2,7,11,15]
target = 9

Output:
[1,2]

Example 2:
Input:
numbers = [2,3,4]
target = 6

Output:
[1,3]

Example 3:
Input:
numbers = [-1,0]
target = -1

Output:
[1,2]
*/

#include <iostream>
#include <vector>
using namespace std;

vector<int> twoSum(vector<int>& numbers, int target) {

    vector<int> v;
    int l=0;
    int r=numbers.size()-1;
    while(l<r){
        int rem=target-numbers[l];
        if(numbers[l]+numbers[r]==target){
            v.push_back(l+1);
            v.push_back(r+1);
            break;
        }
        else if(numbers[r]>rem){
            r--;
        }
        else
            l++;
    }
    return v;
}

int main() {

    vector<int> numbers = {2,7,11,15};
    int target = 9;

    vector<int> ans = twoSum(numbers, target);

    cout << "[" << ans[0] << "," << ans[1] << "]";

    return 0;
}