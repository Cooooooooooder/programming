#include<iostream>
using namespace std;

class Test
{
    private:
        int x=0;
    public:
        Test(int in)
        {
            x=in;
        }
         void operator *= (int y)
        {
            x*=y;
            cout<<"X is : "<<x<<endl;
        }
};
int main()
{
    Test ob1(3);
    ob1*=20;
    
}