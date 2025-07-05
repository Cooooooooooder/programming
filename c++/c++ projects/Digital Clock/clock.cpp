#include<iostream>

using namespace std;
#include<windows.h>

int main()
{
    //Variables
    int hours=0;
    int min=0;
    int sec=0;

    //-------------
    cout<<"Enter Hours : ";
    cin>>hours;
    cout<<"Enter Minutes : ";
    cin>>min;
    cout<<"Enter Seconds : ";
    cin>>sec;
    
    //-------------

    while (true)
    {
        if (sec>59)
        {
            min++;
            sec =0;
        }
        if (min>59)
        {
            hours++;
            min++;
        }
        if(hours >23)
        {
            hours =0;
        }
        sec++;
        system("cls");
        cout<<hours<<" : "<<min<<" : "<<sec<<endl;
        Sleep(1000);
    }
    
}