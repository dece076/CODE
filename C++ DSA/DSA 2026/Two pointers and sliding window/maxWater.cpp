/*
Question:
You are given an integer array height of length n.

There are n vertical lines drawn such that the two endpoints
of the ith line are:

(i, 0) and (i, height[i])

Find two lines that together with the x-axis form a container,
such that the container contains the most water.

Return the maximum amount of water a container can store.

Example 1:
Input:
height = [1,8,6,2,5,4,8,3,7]

Output:
49

Explanation:
Choose the lines with heights 8 and 7.

Width = 8 - 1 = 7

Area = min(8,7) × 7
     = 49

Example 2:
Input:
height = [1,1]

Output:
1
*/

#include <iostream>
#include <vector>
#include <algorithm>
using namespace std;

int maxArea(vector<int>& heights) {

    int maxWater = 0;

    int l = 0;
    int r = heights.size() - 1;

    while(l < r) {

        int width = r - l;

        int h = min(heights[l], heights[r]);

        int water = width * h;

        maxWater = max(maxWater, water);

        if(heights[l] < heights[r]) {
            l++;
        }
        else {
            r--;
        }
    }

    return maxWater;
}

int main() {

    vector<int> heights = {1,8,6,2,5,4,8,3,7};

    cout << maxArea(heights);

    return 0;
}