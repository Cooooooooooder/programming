#include<iostream>
using namespace std;

//write a complete program to represent th erectangle class
//define two data members with constructor overloading add a member function
//outside the class for printing , define 2 rectangle objects , use
//friend function to find the bigest Rectangle area;

static int count = 1;

class Rectangle
{
    private:
    int length =0;
    int width =0;
    public:
    Rectangle()
    {
        
        cout<<"Enter the length : "<<count<<endl;
        cin>>length;
        cout<<"Enter the width : "<<count<<endl;
        cin>>width;
        count++;
    }
    Rectangle(int len, int wid)
    {
        length = len;
        width = wid;
    }
    int area()
    {
        int area = length * width;
        return area;
    }



    void print(Rectangle ob1, Rectangle ob2);

    friend string check(Rectangle ob1, Rectangle ob2);



};
    string check(Rectangle ob1, Rectangle ob2)
    {
        if (ob1.area()>ob2.area())
        {
            return "The Area of the First rectangle is the biggest .";
        }
        else if (ob1.area()<ob2.area())
        {
            return "The Area of the Second rectangle is the biggest .";
        } 
        else 
        {
            return "The two Rectangles are equals . ";
        }
    }

    void Rectangle:: print(Rectangle ob1, Rectangle ob2)
    {
        cout<<check(ob1, ob2)<<endl;

    }

int main()
{
    Rectangle ob1;
    Rectangle ob2;
    Rectangle ob3;
    Rectangle ob4;
    ob1.print(ob1,ob2);
}
