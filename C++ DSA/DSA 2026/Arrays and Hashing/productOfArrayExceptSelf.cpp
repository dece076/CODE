#include <iostream>
#include <vector>

using namespace std;

/*
LeetCode 238. Product of Array Except Self

Problem:
Given an integer array nums, return an array answer such that
answer[i] is equal to the product of all the elements of nums
except nums[i].

The algorithm must run in O(n) time and without using division.

Example 1:
Input:
nums = [1,2,3,4]

Output:
[24,12,8,6]

Example 2:
Input:
nums = [-1,1,0,-3,3]

Output:
[0,0,9,0,0]

----------------------------------------------------

Approach (Prefix & Suffix Products)

1. left[i]  = product of all elements before i.
2. right[i] = product of all elements after i.
3. answer[i] = left[i] * right[i].

Time Complexity: O(n)
Space Complexity: O(n)
*/

class Solution {
public:
    vector<int> productExceptSelf(vector<int>& nums) {

        int n = nums.size();

        vector<int> left(n, 1);
        vector<int> right(n, 1);
        vector<int> ans;

        int leftProduct = 1;
        int rightProduct = 1;

        // Prefix products
        for (int i = 1; i < n; i++) {
            left[i] = nums[i - 1] * leftProduct;
            leftProduct = left[i];
        }

        // Suffix products
        for (int i = n - 2; i >= 0; i--) {
            right[i] = nums[i + 1] * rightProduct;
            rightProduct = right[i];
        }

        // Final answer
        for (int i = 0; i < n; i++) {
            ans.push_back(left[i] * right[i]);
        }

        return ans;
    }
};

int main() {

    vector<int> nums = {1, 2, 3, 4};

    Solution obj;

    vector<int> result = obj.productExceptSelf(nums);

    cout << "Output: ";

    for (int x : result)
        cout << x << " ";

    cout << endl;

    return 0;
}