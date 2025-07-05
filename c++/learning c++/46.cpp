#include<iostream>
using namespace std;

class Cal 
{
    private:
    int x=0;
    public:
    Cal()
    {
        cout<<"Enter x : ";
        cin>>x;
    }
    void  operator ++ (int)//postfix
    {
        x++;
    }
       void  operator ++ ()//prefix
    {
        ++x;
        cout<<"X after is : "<<x<<endl;

    }

    // void print()
    // {
    //     cout<<"X after is : "<<x<<endl;
    // }


};
int main()
{
    Cal ob1;
    ob1++;
    ++ob1;
    // ob1.print();   
}