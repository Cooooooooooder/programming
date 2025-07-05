#include<iostream>
using namespace std;

class Sample
{
    private:
    int x;
    int y;
    public:
    Sample()
    {
        x=10;
        y=20;
    }
    ~Sample()
    {
        cout<<"Destructor"<<endl;
    }
    void show()
    {
        cout<<"X is : "<<x<<endl;
        cout<<"Y is : "<<y<<endl;

    }
};

int main()
{
    Sample ob1;
    ob1.show();
    ob1.~Sample();
    ob1.show();


    return 0; 
}