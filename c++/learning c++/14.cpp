#include<iostream>
using namespace std;

class Cal
{
    private:
    int n1;
    int n2;

    public:
    Cal()
    {
        cout<<"Enter the First number : "<<endl;
        cin>>n1;
        cout<<"Enter the Second number : "<<endl;
        cin>>n2;
        
    }

    Cal(int x,int y)
    {
        n1=x;
        n2=y;
    }

    void sum()
    {
        int sum=n1+n2;
        cout<<"The sum of the two numbers is "<<sum<<endl;

    }
    void divide()
    {
        double divide=(float)n1/n2;
        cout<<"The divition is : "<<divide<<endl;
    }
    void mod()
    {
        int modulas=n1%n2;
        cout<<"The modulus is : "<<endl;
    }
    void multiply()
    {
        int mul=n1*n2;
        cout<<"The multiplication is : "<<mul<<endl;
    }

};

int main()
{
    Cal ob1;
    Cal ob2(8,10);
    ob1.divide();
    ob1.multiply();
    ob1.mod();
    ob1.sum();

    ob2.divide();
    ob2.multiply();
    ob2.mod();
    ob2.sum();
}