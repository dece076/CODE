/*
Question:
Given an unsorted array of integers nums, return the length of the
longest consecutive elements sequence.

You must write an algorithm that runs in O(n) time.

Example 1:
Input:
nums = [100,4,200,1,3,2]

Output:
4

Explanation:
The longest consecutive sequence is [1,2,3,4].
Its length is 4.

Example 2:
Input:
nums = [0,3,7,2,5,8,4,6,0,1]

Output:
9

Explanation:
The longest consecutive sequence is [0,1,2,3,4,5,6,7,8].
Its length is 9.
*/

#include <iostream>
#include <vector>
#include <unordered_set>
using namespace std;

int longestConsecutive(vector<int>& nums) {

    unordered_set<int> st(nums.begin(), nums.end());

    int longest = 0;

    for(int num : nums) {

        if(!st.count(num - 1)) {

            int len = 1;
            int cur = num;

            while(st.count(cur + 1)) {
                len++;
                cur++;
            }

            longest = max(longest, len);
        }
    }

    return longest;
}

int main() {

    vector<int> nums = {100,4,200,1,3,2};

    cout << longestConsecutive(nums) << endl;

    return 0;
}