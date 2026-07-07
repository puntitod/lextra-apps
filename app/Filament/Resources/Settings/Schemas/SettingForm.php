<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rule;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('key')
                ->required()
                ->disabled(fn($record) => $record !== null)
                ->rules([
                    fn($record) => Rule::unique('settings', 'key')
                        ->ignore($record?->id),
                ]),

            Select::make('category')
                ->label('Category')
                ->options([
                    // =====================
                    // CORE / GLOBAL
                    // =====================
                    'core'      => 'Core / General',
                    'branding'  => 'Branding',
                    'theme'     => 'Theme & Color',

                    // =====================
                    // LAYOUT
                    // =====================
                    'layout'    => 'Layout (Navbar, Footer, Badge, Button, etc)',

                    // =====================
                    // SECTIONS (Homepage)
                    // =====================
                    'sections'  => 'Sections (Hero, About, Services, Testimonials, etc)',

                    // =====================
                    // CONTENT
                    // =====================
                    'content'   => 'Content (Pages, Services, FAQ, etc)',

                    // =====================
                    // SYSTEM
                    // =====================
                    'system'    => 'System (SEO, Legal, Contact, Social Media, etc)',
                ])
                ->default('core')
                ->required()
                ->searchable(),

            Select::make('type')
                ->options([
                    'text'  => 'Text',
                    'image' => 'Image',
                    'video' => 'Video',
                    'color' => 'Color',
                ])
                ->required()
                ->reactive(),

            /**
             * ========= COLOR =========
             */
            Select::make('value.color')
                ->label('Color')
                ->options([
                    'red' => 'Red',
                    'orange' => 'Orange',
                    'amber' => 'Amber',
                    'yellow' => 'Yellow',
                    'lime' => 'Lime',
                    'green' => 'Green',
                    'emerald' => 'Emerald',
                    'teal' => 'Teal',
                    'cyan' => 'Cyan',
                    'sky' => 'Sky',
                    'blue' => 'Blue',
                    'indigo' => 'Indigo',
                    'violet' => 'Violet',
                    'purple' => 'Purple',
                    'fuchsia' => 'Fuchsia',
                    'pink' => 'Pink',
                    'rose' => 'Rose',
                    'gray' => 'Gray',
                    'zinc' => 'Zinc',
                    'neutral' => 'Neutral',
                    'stone' => 'Stone',
                ])
                ->visible(fn($get) => $get('type') === 'color')
                ->required(),

            /**
             * ========= TEXT (MULTI LANGUAGE) =========
             */
            Tabs::make('Language')
                ->visible(fn($get) => $get('type') === 'text')
                ->columnSpanFull()
                ->tabs([
                    Tab::make('Indonesia')
                        ->schema([
                            RichEditor::make('value.id')
                                ->label('Bahasa Indonesia')
                                ->required(),
                        ]),
                    Tab::make('English')
                        ->schema([
                            RichEditor::make('value.en')
                                ->label('English')
                                ->required(),
                        ]),
                ]),

            /**
             * ========= FILE =========
             */
            FileUpload::make('value.path')
                ->label('File')
                ->visible(fn($get) => in_array($get('type'), ['image', 'video']))
                ->disk('public')
                ->directory('settings')
                ->enableOpen()
                ->enableDownload()
                ->columnSpanFull(),
        ]);
    }
}
