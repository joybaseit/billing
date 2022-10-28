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
        
        return view('home');
    }
    public function new_bill()
    {
        $data = Products::select('product_name')->get();
        $data1 = Colour::select('colour_name')->get();
        return view('new_bill')->with(compact('data','data1'));
    }
    public function store(Request $request)
    {
        $id = auth()->user()->id;
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
        $data->total_usd = $request->input('totalusd');
        $data->user_id = $id;
        $data->save();
        return redirect('/newbill')->with(['success_add' => 'This is a success alert. !']);
        

    }

    public function list (Request $request)
    {
        if($request->ajax())
        {
            $data = Billing::latest();
            return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function($row){
                    $actionBtn = '
                                   
                                    <a class="btn btn-primary"  href="'. route('bill.pdf', $row->id) .'"> pdf </a>
                              ';              
                            return $actionBtn;
                })
                ->addColumn('type', function($row){

                    if($row->user_id == 1)
                    {
                        return '<small>Print</small>';
                    }
                    else if ($row->user_id == 2)
                    {
                        return '<small>Embroidery</small>';
                    }
                    
                })
                ->rawColumns(['action','type'])
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
