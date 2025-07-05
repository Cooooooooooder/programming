#include<iostream>
using namespace std;

class Rectangle
{
    public:
    int width;
    int height;
     int space();
};

int Rectangle::space()
{
    return width * height;
}

int main()
{
    Rectangle r1;
    Rectangle r2;

    r1.width=48;
    r1.height=83;
    
    r2.width=43;
    r2.height=94;

    cout<<"The space of Rectangle 1 is : "<<r1.space()<<endl;
    cout<<"The space or Rectangle 2 is : "<<r2.space()<<endl;
    
    return 0;
}
