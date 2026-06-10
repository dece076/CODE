/*
Problem:
Given two integer arrays nums1 and nums2,
return an array of their intersection.

Each element in the result must be unique,
and you may return the result in any order.

Example 1:
Input:
nums1 = [1,2,2,1]
nums2 = [2,2]

Output:
[2]

Example 2:
Input:
nums1 = [4,9,5]
nums2 = [9,4,9,8,4]

Output:
[4,9]
*/
#include <iostream>
#include <vector>
#include <unordered_set>
using namespace std;

vector<int> intersection(vector<int>& nums1, vector<int>& nums2) {
    vector <int> v;
    unordered_set<int> st1;
    unordered_set<int> st2;
    for(int x: nums1){
        st1.insert(x);
    }
    for(int x: nums2){
        st2.insert(x);
    }
    for(int x: st2){
        if(st1.find(x)!=st1.end()){
            v.emplace_back(x);
        }
    }
    return v;

}

int main() {
    vector<int> nums1 = {1,2,2,1};
    vector<int> nums2 = {2,2};

    vector<int> ans = intersection(nums1, nums2);

    for(int x : ans) {
        cout << x << " ";
    }

    return 0;
}