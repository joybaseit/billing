<?php

namespace App\Http\Controllers;
use App\Models\Colour;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Billing;
use DataTables;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data = Products::select('product_name')->get();
        $data1 = Colour::select('colour_name')->get();
        return view('home')->with(compact('data','data1'));
    }

    public function store(Request $request)
    {
       
        $data = new Billing();
        $data->order_no = $request->input('order_no');
        $data->style_no = $request->input('style_no');
        $data->design_no = $request->input('design_no');
        $data->stich = $request->input('stich');
        $data->product_name = $request->input('product_name');
        $data->colour_name = $request->input('colour_name');
        $data->unit_name = $request->input('unit_name');
        $data->quantity = $request->input('quantity');
        $data->unit_price = $request->input('unit_price');
        $data->total = $request->input('total');
        $data->save();
        return redirect('/home')->with(['success_add' => 'Inserted Successfully !']);
        

    }

    public function list (Request $request)
    {
        if($request->ajax())
        {
            $data = Billing::get();
            return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function($row){
                    $actionBtn = '
                                   
                                    <a class="btn btn-primary"  href="'. route('bill.pdf', $row->id) .'"> pdf </a>
                              ';              
                            return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
            
        return view('list');
    }

    public function downloadPDF($id){

         
        $show = Billing::where('id',$id)->first();
        $pdf = PDF::loadView('pdf', compact('show'));
        return $pdf->download('bill.pdf');
        
    }
}
