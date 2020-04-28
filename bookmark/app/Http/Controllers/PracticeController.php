<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Str;

class PracticeController extends Controller
{

    public function practice28()
    {
        # As an example, grab a user we know has books on their list
        $user = User::where('email', '=', 'jill@harvard.edu')->first();

        # Grab the first book on their list
        $book = $user->books()->first();

        # Update and save the notes for this relationship
        $book->pivot->notes = "New note...";
        $book->pivot->save();

        dump($book->toArray());

        return 'Update complete';
    }


    public function practice27()
    {
        # As an example, grab a user we know has books on their list
        $user = User::where('email', '=', 'jill@harvard.edu')->first();

        # Grab the first book on their list
        $book = $user->books()->first();

        # Delete the relationship
        $book->pivot->delete();

        dump($book->toArray());

        return 'Delete complete';
    }


    public function practice26()
    {
        # Eager load users to reduce number of queries
        $books = Book::with('users')->get();

        foreach ($books as $book) {
            if ($book->users->count() == 0) {
                dump($book->title . ' is not on any user’s list');
            } else {
                dump($book->title . ' is on the following user’s lists:');

                foreach ($book->users as $user) {
                    dump($user->email);
                }
            }
        }
    }

    public function practice25()
{
    $user = User::where('email', '=', 'jill@harvard.edu')->first();

    dump($user->name.' has the following books on their list: ');

    # Note how we can treate the `books` relationship as a dynamic propert ($user->books)
    foreach ($user->books as $book) {
        dump($book->title);
    }
}

    public function practice22()
    { # Eager load the author with the book
         $books = Book::with('author')->get();
        foreach ($books as $book) {
            if ($book->author) {
                dump($book->author->first_name.' '.$book->author->last_name.' wrote '.$book->title);
            } else {
                dump($book->title. ' has no author associated with it.');
            }
        }

       dump($books->toArray());


    }

    public function ppractice21()
    {
        #Read Querying with relationships

        # Get an example book
        $book = Book::whereNotNull('author_id')->first();

        # Get the author from this book using the "author" dynamic property
        # "author" corresponds to the the relationship method defined in the Book model
        $author = $book->author;

        # Output
        dump($book->title.' was written by '.$author->first_name.' '.$author->last_name);
        dump($book->toArray());

    }

    public function practice20()
    { #Create) Associate an author with a book
        $author = Author::where('first_name', '=', 'J.K.')->first();
        $book = new Book;
        $book->slug = 'fantastic-beasts-and-where-to-find-them';
        $book->title = "Fantastic Beasts and Where to Find Them";
        $book->published_year = 2001;
        $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/cover-placeholder.png';
        $book->info_url = 'https://en.wikipedia.org/wiki/Fantastic_Beasts_and_Where_to_Find_Them';
        $book->purchase_url = 'http://www.barnesandnoble.com/w/fantastic-beasts-and-where-to-find-them-j-k-rowling/1004478855';
        $book->author()->associate($author); # <--- Associate the author with this book
        $book->description = 'Fantastic Beasts and Where to Find Them is a 2001 guide book written by British author J. K. Rowling (under the pen name of the fictitious author Newt Scamander) about the magical creatures in the Harry Potter universe. The original version, illustrated by the author herself, purports to be Harry Potter’s copy of the textbook of the same name mentioned in Harry Potter and the Philosopher’s Stone (or Harry Potter and the Sorcerer’s Stone in the US), the first novel of the Harry Potter series. It includes several notes inside it supposedly handwritten by Harry, Ron Weasley, and Hermione Granger, detailing their own experiences with some of the beasts described, and including in-jokes relating to the original series.';
        $book->save();
        dump($book->toArray());


    }
    /**
     * Demonstrates deleting data
     */
    // public function practice7()
    // {
    //     # First get a book to delete
    //     $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

    //     if (!$book) {
    //         dump('Did not delete- Book not found.');
    //     } else {
    //         $book->delete();
    //         dump('Deletion complete; check the database to see if it worked...');
    //     }
    // }

    /**
     * Demonstrates updating data
     */
    // public function practice6()
    // {
    //     # First get a book to update
    //     $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

    //     if (!$book) {
    //         dump("Book not found, can not update.");
    //     } else {
    //         # Change some properties
    //         $book->title = 'The Really Great Gatsby';
    //         $book->published_year = '2025';

    //         # Save the changes
    //         $book->save();

    //         dump('Update complete; check the database to confirm the update worked.');
    //     }
    // }

    /**
     * Demonstrates the `first` method
     */
    public function practice5()
    {
        $book = Book::where('slug', '=', 'the-martian')->first();

        dump($book);
        dump($book->toArray());
    }

    /**
     * Demonstate reading data
     */
    public function practice4()
    {
        //$book = new Book();
        //$books = Book::where('title', 'LIKE', '%Harry Potter%')->get();
        $books = Book::where('title', 'LIKE', '%Harry Potter%')->orWhere('published_year', '>=', 1998)->get();

        if ($books->isEmpty()) {
            dump('No matches found');
        } else {
            dump($books->toArray());

            foreach ($books as $book) {
                dump($book->title);
            }
        }
    }

    /**
     * Demonstrates creating data
     */
    public function practice3()
    {
        # Instantiate a new Book Model object
        $book = new Book();

        # Set the properties
        # Note how each property corresponds to a column in the table
        $book->title = 'The Martian';
        $book->slug = 'the-martian';
        $book->author = 'Anthony Weir';
        $book->published_year = 2011;
        $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/the-martian.jpg';
        $book->info_url = 'https://en.wikipedia.org/wiki/The_Martian_(Weir_novel)';
        $book->purchase_url = 'https://www.barnesandnoble.com/w/the-martian-andy-weir/1114993828';
        $book->description = 'The Martian is a 2011 science fiction novel written by Andy Weir. It was his debut novel under his own name. It was originally self-published in 2011; Crown Publishing purchased the rights and re-released it in 2014. The story follows an American astronaut, Mark Watney, as he becomes stranded alone on Mars in the year 2035 and must improvise in order to survive.';

        # Invoke the Eloquent `save` method to generate a new row in the
        # `books` table, with the above data
        $book->save();

        dump('Added: ' . $book->title);
    }


     public function practice9()
    { #Retrieve the last 2 books that were added to the books table.
      $results = Book::latest()->take(2)->get();
      dump($results);
    }


    public function practice10()
    { #Retrieve all the books published after 1950.
    $results = Book::where('published_year', '>', 1950)->get();
    dump($results->toArray());

    }


     public function practice11()
    { #Retrieve all the books in alphabetical order by title.
        $result = Book::orderBy('title')->get();
        dump($result->toArray());

    }

     public function practice12()
    { #Retrieve all the books in descending order according to published year.
       $result = Book::orderBy('published_year', 'desc')->get();
       dump($result->toArray());
    }

     public function practice13()
    { #Find any books by the author “J.K. Rowling” and update the author name to be “JK Rowling”
        $books = Book::where('author', '=', 'J.K. Rowling')->get();
        foreach ($books as $book) {
                $book->author = 'JK Rowling';
               $book->save();
        }
        dump($books);
    }
     public function practice14()
    { #Remove any/all books with an author name that includes the string “Rowling”.
       $books = Book::where('author', 'LIKE', '%Rowling%')->delete();

       dump($books);
    }
    /**
     * Demonstrates using the Book model
     */
    public function practice()
    {
        //dump(Str::plural('mouse'));
        $books = Book::where('title', 'LIKE', '%Harry Potter%')->first();
        dump($books);
        dump(Book::all()->toArray());
    }

    /**
     * First practice example
     */
    public function practice1()
    {
        $books = Book::where('author', '=', 'Dr. Suess')->get();
        $books->delete();
        //dump($results->toArray()); # Study the results
        dump('Book delete');
       // dump('This is the first example.');
    }

    /**
     * ANY (GET/POST/PUT/DELETE)
     * /practice/{n?}
     * This method accepts all requests to /practice/ and
     * invokes the appropriate method.
     * http://bookmark.loc/practice => Shows a listing of all practice routes
     * http://bookmark.loc/practice/1 => Invokes practice1
     * http://bookmark.loc/practice/5 => Invokes practice5
     * http://bookmark.loc/practice/999 => 404 not found
     */
    public function index($n = null)
    {
        $methods = [];

        # Load the requested `practiceN` method
        if (!is_null($n)) {
            $method = 'practice' . $n; # practice1

            # Invoke the requested method if it exists; if not, throw a 404 error
            return (method_exists($this, $method)) ? $this->$method() : abort(404);
        } # If no `n` is specified, show index of all available methods
        else {
            # Build an array of all methods in this class that start with `practice`
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'practice')) {
                    $methods[] = $method;
                }
            }

            # Load the view and pass it the array of methods
            return view('practice')->with(['methods' => $methods]);
        }
    }
}
