#include<iostream>
#include<cstdlib>
#include<ctime>
using namespace std;

int tries = 0;
int guessed = 0;
int randnum = 0;
int main()
{
    srand(time(0));

    cout<<"Enter Your Guess between (1 : 100) : ";
    cin>>guessed;

    while (guessed<1 || guessed > 100)
    {
        cout<<"Wrong choice!  Enter Your Guess between (1 : 100) : ";
        cin>>guessed;
    }
    randnum = std::rand() % 100 + 1;

    while (randnum != guessed)
    {
        cout<<"try again! ";
        if(guessed > randnum )
        {
            cout<<"Choice Smaller Num "<<endl;
            cout<<"Enter Your Guess between (1 : 100) : ";
            cin>>guessed;
        }
        else if(guessed < randnum )
        {
            cout<<"Choice bigger Num "<<endl;
            cout<<"Enter Your Guess between (1 : 100) : ";
            cin>>guessed;
        }
        tries++;


    }
    cout<<guessed<<" is Right ."<<endl;
    cout<<"The number of Wrong tries is : "<<tries<<endl;

    
    






    return 0;
}