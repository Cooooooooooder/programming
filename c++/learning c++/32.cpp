#include <iostream>
using namespace std;

//   write an oop complete program to represent a car , the class constructor will set the values to all its data members ,then create a friend function to increase the car price by 1000

class Car
{
private:
    string name;
    string color;
    int price;

public:
    Car(string n, string c, int p)
    {
        name = n;
        color = c;
        price = p;
    }
    void display();
    friend void increase(Car x);
};

void Car::display()
{
    cout << "The price is : " << price << endl;
}

void increase(Car x)
{
    int incr = x.price * 100;
    cout << "The new price is : " << incr << endl;
}

int main()
{
    Car ob1("Mercidis", "orange", 7000000);
    ob1.display();
    increase(ob1);
}