/*
Problem:
Given an array of integers nums and an integer target,
return the indices of the two numbers such that they add up to target.

You may assume that each input has exactly one solution,
and you may not use the same element twice.

You can return the answer in any order.

Example 1:
Input:
nums = [2,7,11,15]
target = 9

Output:
[0,1]

Explanation:
nums[0] + nums[1] = 2 + 7 = 9
*/

#include <iostream>
#include <vector>
#include <unordered_map>
using namespace std;

vector<int> twoSum(vector<int>& nums, int target) {

    vector <int> v;
    unordered_map <int,int> mp;
    for (int i=0;i<nums.size();i++){
        int x=target-nums[i];
        if(mp.find(x)!=mp.end()){
            v.push_back(i);
            v.push_back(mp[x]);
            break;
        }
        else{
            mp[nums[i]]=i;
        }

    }
    return v;

}

int main() {
    vector<int> nums = {2,7,11,15};
    int target = 9;

    vector<int> ans = twoSum(nums, target);

    cout << "[" << ans[0] << "," << ans[1] << "]" << endl;

    return 0;
}