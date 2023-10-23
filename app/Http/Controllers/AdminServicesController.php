<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class AdminServicesController extends Controller
{
    public function index()
    {
        // Получаем список всех услуг из базы данных \\
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        // $service = Service::findOrFail($id);
        // Валидация данных, пример:
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'duration_minutes' => 'required|string',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // if ($request->hasFile('image_url')) {
        //     $backgroundImage = $request->file('image_url');
        //     $backgroundImageName = time() . '.' . $backgroundImage->getClientOriginalExtension();
        //     $backgroundImage->move(public_path('backgrounds'), $backgroundImageName);
        //     $service->image_url = '/backgrounds/' . $backgroundImageName;
        // }
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images'), $imagePath);
    
        
        // Создаем новую услугу в базе данных
        Service::create($validatedData);

        // Редирект на страницу со списком услуг
        return redirect()->route('service.index')->with('success', 'Услуга успешно добавлена!');
    }
//     public function uploadAvatar(Request $request)
// {
//     $request->validate([
//         'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);
//     if ($request->hasFile('image_url')) {
//         $image_url = $request->file('image_url');
//         $imageName = time() . '.' . $image_url->getClientOriginalExtension();
//         $image_url->move(public_path('photos'), $imageName);

//         // $validatedData->image_url = '/photos/' . $imageName;
//         $validatedData['image_url'] = '/storage/' . $imageName;
//     }
//     Service::create($validatedData);

//     return back()->with('success', 'Аватар успешно загружен.');
// }
    // }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function show($id)
{
    $service = Service::findOrFail($id);
    return view('admin.services.show', compact('service'));
}

    // public function update(Request $request, Service $service)
    // {
    //     // Валидация данных, пример:
    //     $validatedData = $request->validate([
    //         'name' => 'required|string',
    //         'description' => 'nullable|string',
    //         'price' => 'required|numeric',
    //         'duration_minutes' => 'required|string',
    //         // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);
    //     // if ($request->hasFile('image')) {
    //     //     $imagePath = $request->file('image')->store('images/services', 'public'); // Сохраните изображение на сервере
    //     //     $validatedData['image_url'] = '/storage/' . $imagePath; // Сохраните URL изображения в базе данных
    //     // }

    //     // Обновляем данные услуги
    //     $service->update($validatedData);
            
    //     // Редирект на страницу со списком услуг
    //     return redirect()->route('service.index');
    // }
    public function update(Request $request, $id)
{
    $service = Service::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'duration_minutes' => 'required|string',
        'background_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Обработка загрузки изображения фона
    if ($request->hasFile('image_url')) {
        $backgroundImage = $request->file('image_url');
        $backgroundImageName = time() . '.' . $backgroundImage->getClientOriginalExtension();
        $backgroundImage->move(public_path('backgrounds'), $backgroundImageName);
        $service->image_url = '/backgrounds/' . $backgroundImageName;
    }

    $service->update($validatedData);

    return redirect()->route('service.index')->with('success', 'Информация об услуге обновлена успешно.');
}


    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.delete', compact('service'));
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        session()->flash('success', 'Услуга успешно удалена.');

        return redirect()->route('service.index');

    }
}

